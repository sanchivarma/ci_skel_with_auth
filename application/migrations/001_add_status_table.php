<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * Status Table
 *        
 */
class Migration_add_status_table extends CI_Migration {
	public function up() {

		//Create Table
		$this->db->query ( "CREATE TABLE `status` (
								  `id` int(11) NOT NULL AUTO_INCREMENT,
								  `name` varchar(100) DEFAULT NULL,
								  PRIMARY KEY (`id`),
								  UNIQUE KEY `name` (`name`)
								) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;" );
		
		//Seed table with default values
		$data = array(
						array('name' => "active"),			
						array('name' => "inactive"),
						array('name' => "deleted")
					);
		
		$this->db->insert_batch('status', $data);

	}
	public function down() {
		$this->dbforge->drop_table ( 'status' );
	}
}