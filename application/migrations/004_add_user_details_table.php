<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * USERS Table        
 */
class Migration_add_user_details_table extends CI_Migration {
	public function up() {
		$this->dbforge->add_field ( array (
				'id' => array (
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => FALSE,
						'auto_increment' => TRUE 
				),	
				'user_id' => array (
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => FALSE,
					'null' => FALSE 
				),			
				'contact' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => FALSE 
				),
				'address_line_1' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'address_line_2' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'city' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'state' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE
				),
				'zipcode' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE
				),
				'geo_lat' => array (
						'type' => 'decimal(10,5)',
						'null' => TRUE
				),
				'geo_long' => array (
						'type' => 'decimal(10,5)',
						'null' => TRUE
				)
		) );
		
		$this->dbforge->add_key ( 'id', TRUE );
		$this->dbforge->create_table ( 'user_details' );
		$this->db->query ( "ALTER TABLE user_details ENGINE = InnoDB" );
		
		/* ADDING FOREIGN KEYS */
		$this->db->query ( "ALTER TABLE user_details ADD FOREIGN KEY user_details(user_id)
							REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE" );
	}
	public function down() {
		$this->dbforge->drop_table ( 'user_details' );
	}
}