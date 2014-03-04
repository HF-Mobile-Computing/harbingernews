class AddCaptionToArticles < ActiveRecord::Migration
  def change
  	change_table :articles do |t|
  		t.string :caption 
  	end
  end
end
