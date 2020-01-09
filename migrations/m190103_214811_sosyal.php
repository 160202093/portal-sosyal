<?php

use yii\db\Migration;

/**
 * Class m190103_214811_sosyal
 */
class m190103_214811_sosyal extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
	$tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

		/*
		$this->createTable('kullanicilar',[
		'id'=>$this->primaryKey(),
		'UserID' => $this->integer(),
		'F_UserID' => $this->integer(),
		'Username' => $this->text(),
		'Password' => $this->text(),
		'Name' => $this->text(),
		'Surname'=> $this->text(),
		'Age'=> $this->text(),
		'Location'=> $this->text(),
		'Mail'=> $this->text(),
		'Gender'=> $this->text()
		
		],$tableOptions);
		
		*/

	
		$this->createTable('share',[
		'id'=>$this->primaryKey(),
		'UserID' => $this->integer(),
		'Date'=> $this->text(),
		'Text'=>$this->text()
		],$tableOptions);

		$this->createTable('friendship',[
		'id'=>$this->primaryKey(),
		'UserID' => $this->integer(),
		'FriendID'=> $this->text(),
		'Relation_start_date'=>$this->text()
		],$tableOptions);
		
				
	    $this->createIndex(
         'idx_ku',
		 'friendship',
		 'UserID'
		);

				
	  /*  $this->createIndex(
         'idx_sh',
		 'share',
		 'UserID'
		);*/

				
	    /*$this->createIndex(
         'idx_fr',
		 'friendship',
		 'F_UserID'
		);*/

			
		$this->addForeignKey(
		'fk_ku',
		'friendship',
		'UserID',
		'user',
		'id',
		'CASCADE'
		);

			
		/*$this->addForeignKey(
		'fk_sh',
		'share',
		'UserID',
		'user',
		'id',
		'CASCADE'
		);*/

			
		/*$this->addForeignKey(
		'fk_fr',
		'friendship',
		'F_UserID',
		'user',
		'id',
		'CASCADE'
		);*/

		/*$this->addForeignKey(
		'fk-kullanicilar-UserID',
		'kullanicilar',
		'UserID',
		'friendship',
		'F_UserID',
		'CASCADE'
		);*/

		/*$this->insert('kullanicilar',[
		'Username'=>'mert',
		'Password'=>'kara'
		]);*/

			/*$this->insert('Share',[
		'Date'=>'mert',
		'Text'=>'kara'
		]);

			$this->insert('Friendship',[
		'FriendID'=>'mert',
		'Relation_start_date'=>'kara'
		]);*/
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
	
		//$this->dropTable('kullanicilar');
		$this->dropTable('share');
		$this->dropTable('friendship');

        echo "m190103_214811_sosyal cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_214811_sosyal cannot be reverted.\n";

        return false;
    }
    */
}
