<?php defined('SYSPATH') or die('No direct script access.');

class Model_Cache extends Model_Fuji {

	protected $_db;
	
	public function __construct()
	{
		// Create the object from parent
		
		//parent::__construct('fuji');
	}

	public function _worklist()
	{
		$filter   = Arr::get($_GET, 'filter', '');
		$filtered = Arr::get($_GET, 'filtered', '');
		$page	  = Arr::get($_GET, 'page', 1);
		$count	  = Arr::get($_GET, 'count', 10);

		$start = ($page - 1) * $count;
		//$end   = $start + $count;
		
		$results = array();
		
		$limit = ' LIMIT '.$start.','.$count;

		// Prepare Query		
		//$query = 'SELECT ACCESSION, DESCRIPTION, BODY_PART, TIME, MODALITY, INSTANCE_EUID FROM worklist ';		
		$query = 'SELECT * FROM worklist';		

		// Filtering by the filter
		if ($filter != '')
		{
			$query .= ' WHERE';
			$query .= ($filtered == 'Modality') ? ' UPPER(MODALITY)=\''.strtoupper($filter).'\'' : '';
			$query .= ($filtered == 'Division') ? ' UPPER(BODY_PART)=\''.strtoupper($filter).'\'' : '';
			$query .= ($filtered == 'Procedure') ? ' UPPER(DESCRIPTION) LIKE \'%'.strtoupper($filter).'%\'' : '';
		}
		
		$query .= ' ORDER BY TIME DESC '.$limit;
		
		$results = $this->execute($query);
		// Return the output from execution.
		return $results;
	}
	
	public function _update($results)
	{
	
		// update the status if 'D' or 'F' if the instance_euid does exist
		// insert study if the instance_euid does not exist
		
		try
		{
			$dbh = new PDO('sqlite:'.Mnode::$DB);
			
			// Get the list of each existing study's instance_euid and status
			$study = array();
			foreach ($dbh->query("SELECT ID, INSTANCE_EUID, STATUS FROM worklist") as $row)
			{
				//$study[] = array('id' => $row['id'], 'instance_euid' => $row['INSTANCE_EUID'], 'status' => $row['status']);
				$study[$row['INSTANCE_EUID']] = array('ID' => $row['ID'], 'STATUS' => $row['STATUS']);
				echo $row['ID'].': '.$row['STATUS'].' ['.$row['INSTANCE_EUID'].']'.PHP_EOL;
			}
			
			foreach ($results as $row)
			{
				$status = substr($row['DESCRIPTION'],1,1);
				if (array_key_exists($row['INSTANCE_EUID'], $study))
				{
					if ($status != $study[$row['INSTANCE_EUID']]['STATUS'])
					{
						$dbh->exec("UPDATE worklist SET DESCRIPTION='".$row['DESCRIPTION']."', STATUS='".$status."' WHERE ID='".$study[$row['INSTANCE_EUID']]['ID']."';");
					}
				}
				else
				{
					$dbh->exec("INSERT INTO worklist VALUES (NULL,'".$row['SITE']."','".$row['ACCESSION']."','".$row['MODALITY']."','".$row['BODY_PART']."','".$row['DESCRIPTION']."','".$row['TIME']."','".$status."','".$row['INSTANCE_EUID']."');");
					//echo "INSERT INTO worklist VALUES (NULL,'".$row['SITE']."','".$row['ACCESSION']."','".$row['MODALITY']."','".$row['BODY_PART']."','".$row['DESCRIPTION']."','".$row['TIME']."','".$status."','".$row['INSTANCE_EUID']."');";
				}
				//break;
			}
			
			$study = null;
			$results = null;
			
			// Close db connection
			$dbh = null;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function _purge()
	{
	
		// remove studies more than one week old
		
		try
		{
			$dbh = new PDO('sqlite:'.Mnode::$DB);
			
			// delete the old studies
			$dbh->exec("DELETE FROM worklist WHERE TIME < '".date('Y-m-d H:i:s', strtotime('-1 week'))."' OR TIME > '".date('Y-m-d H:i:s', strtotime('+1 day'))."'");
			
			// Close db connection
			$dbh = null;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	/* Function that executes the query.
	 * TODO: Move this to an Oracle Driver?
	 */
	public function execute($query = NULL)
	{
		if ($query !== NULL)
		{
			$this->_query = $query;
		}
		
		$results = array();

		// Connect here
		try
		{
			$dbh = new PDO('sqlite:'.Mnode::$DB);
			
			// Execute query
			$db_results = $dbh->query($query);
			
			if ($db_results)
			{
				// There were results
				foreach ($db_results as $row)
				{
					// Navigate them
					$results[] = $row;
				}
			}

			// Close db connection
			$dbh = null;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
		
		return $results;
	}
	
} // End Cache
