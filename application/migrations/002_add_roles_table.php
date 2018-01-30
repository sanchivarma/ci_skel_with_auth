<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * User Roles Table
 *        
 */
class Migration_add_roles_table extends CI_Migration {
	public function up() {

		//Create Table
		$this->db->query ( "CREATE TABLE `roles` (
								  `id` int(11) NOT NULL AUTO_INCREMENT,
								  `name` varchar(100) DEFAULT NULL,
								  PRIMARY KEY (`id`),
								  UNIQUE KEY `name` (`name`)
								) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;" );
		
		//Seed table with default values
		$data = array(
						array('name' => "admin"),			
						array('name' => "system_user")
					);
		
		$this->db->insert_batch('roles', $data);

	}
	public function down() {
		$this->dbforge->drop_table ( 'roles' );
	}
}