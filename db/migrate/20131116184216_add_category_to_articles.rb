class AddCategoryToArticles < ActiveRecord::Migration
  def change
  	change_table :articles do |t|
  		t.string :category
  	end
  end
end
