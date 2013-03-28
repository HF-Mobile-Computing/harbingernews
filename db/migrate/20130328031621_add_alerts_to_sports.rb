class AddAlertsToSports < ActiveRecord::Migration
  def change
    add_column :sports, :alert, :text
  end
end
