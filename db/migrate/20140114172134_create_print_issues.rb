class CreatePrintIssues < ActiveRecord::Migration
  def change
    create_table :print_issues do |t|
      t.string :link
      t.datetime :pubdate
      t.text :description
      t.string :title
      t.timestamps
    end
  end
end