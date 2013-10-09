class AddAuthorAndDescriptionToArticles < ActiveRecord::Migration
  def change
    change_table :articles do |t|
      t.text :author
      t.text :description
    end
  end
end
