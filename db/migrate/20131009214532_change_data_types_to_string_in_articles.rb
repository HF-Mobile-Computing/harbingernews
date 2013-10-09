class ChangeDataTypesToStringInArticles < ActiveRecord::Migration
  def change
    change_table :articles do |t|
      t.change :author, :string 
      t.change :description, :string
    end
  end
end
