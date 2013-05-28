class AddBioToUsers < ActiveRecord::Migration
  def change
    add_column :users, :bio, :text, :default => "Bio is empty!"
  end
end
