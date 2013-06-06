class CreateAdminAbilities < ActiveRecord::Migration
  def change
    create_table :admin_abilities do |t|

      t.timestamps
    end
  end
end
