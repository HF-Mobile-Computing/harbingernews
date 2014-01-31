class CreateCurrentStreams < ActiveRecord::Migration
  def change
    create_table :streams do |t|
      t.integer :stream_id
      t.string :title
      t.timestamps
    end
  end
end
