class DropRailsAdminHistories < ActiveRecord::Migration
  def up
    drop_table :rails_admin_histories
  end

  def down
    create_table :rails_admin_histories
  end
end
