class CreateSlide1s < ActiveRecord::Migration
  def change
    create_table :slide1s do |t|
      t.string :title
      t.text :caption
      t.text :imgurl

      t.timestamps
    end
  end
end
