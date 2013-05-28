class AddInfoToUsers < ActiveRecord::Migration
  def change
  	add_column :users, :age, :integer
  	add_column :users, :birthday, :date
  	add_column :users, :interests, :text, :default => "Not set"
  end
end
