<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * USERS Table        
 */
class Migration_add_users_table extends CI_Migration {
	public function up() {
		$this->dbforge->add_field ( array (
				'id' => array (
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => FALSE,
						'auto_increment' => TRUE 
				),
				'username' => array (
						'type' => 'varchar',
						'constraint' => 200,
						'null' => FALSE 
				),
				'email' => array (
						'type' => 'varchar',
						'constraint' => 200,
						'null' => FALSE 
				),
				'firstname' => array (
						'type' => 'varchar',
						'constraint' => 200,
						'null' => FALSE 
				),
				'lastname' => array (
						'type' => 'varchar',
						'constraint' => 200,
						'null' => FALSE 
				),
				'password' => array (
						'type' => 'varchar',
						'constraint' => 200,
						'null' => FALSE 
				),
				'reset_password_hash' => array (
					'type' => 'varchar',
					'constraint' => 200,
					'null' => TRUE 
				),
				'status_id' => array (
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => FALSE,
						'null' => FALSE 
				),
				'role_id' => array (
					'type' => 'INT',
					'constraint' => 11,
					'unsigned' => FALSE,
					'null' => FALSE 
				),
				'created_on  timestamp default current_timestamp',
            	'updated_on' => array(
                                        'type' => 'varchar',
                                        'constraint' => 250,
                                        'null' => true,
                                        'on update' => 'NOW()'
				),
				'reset_password_created_on' => array(
										'type' => 'varchar',
										'constraint' => 250,
										'null' => true,
										'on update' => 'NOW()'
				)
		) );
		
		$this->dbforge->add_key ( 'id', TRUE );
		$this->dbforge->create_table ( 'users' );
		$this->db->query ( "ALTER TABLE users ENGINE = InnoDB" );
		
		/* ADDING FOREIGN KEYS */
		$this->db->query ( "ALTER TABLE users ADD FOREIGN KEY users(status_id)
							REFERENCES status(id) ON UPDATE CASCADE ON DELETE CASCADE" );
	}
	public function down() {
		$this->dbforge->drop_table ( 'users' );
	}
}