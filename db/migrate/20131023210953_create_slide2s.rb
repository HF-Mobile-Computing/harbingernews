class CreateSlide2s < ActiveRecord::Migration
  def change
    create_table :slide2s do |t|
      t.string :title
      t.text :caption
      t.text :imgurl
      t.timestamps
    end
  end
end
