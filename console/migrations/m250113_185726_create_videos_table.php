<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tbl_video}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m250113_185726_create_videos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tbl_video}}', [
            'video_id' => $this->string(16)->notNull(),
            'txt_title' => $this->string(512)->notNull(),
            'txt_video_name' => $this->string(512),
            'txt_description' => $this->text(),
            'txt_tags' => $this->string(512),
            'ysn_thumbnil' => $this->boolean(),
            'int_status_type' => $this->integer(1),
            'dat_created_at' => $this->integer(11),
            'dat_updated_at' => $this->integer(11),
            'int_created_by' => $this->integer(11),
        ]);

        $this->addPrimaryKey('pk_video_id', '{{%tbl_video}}', 'video_id');

        // creates index for column `int_created_by`
        $this->createIndex(
            '{{%idx-videos-int_created_by}}',
            '{{%tbl_video}}',
            'int_created_by'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-videos-int_created_by}}',
            '{{%tbl_video}}',
            'int_created_by',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-videos-int_created_by}}',
            '{{%tbl_video}}'
        );

        // drops index for column `int_created_by`
        $this->dropIndex(
            '{{%idx-videos-int_created_by}}',
            '{{%tbl_video}}'
        );

        $this->dropTable('{{%tbl_video}}');
    }
}
