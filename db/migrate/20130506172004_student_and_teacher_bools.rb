class StudentAndTeacherBools < ActiveRecord::Migration
  def up
  	add_column :users, :teacher, :boolean, :default => 0
  end

  def down
  	remove_column :users, :teacher
  end
end
