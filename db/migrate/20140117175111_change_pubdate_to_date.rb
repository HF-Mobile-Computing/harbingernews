class ChangePubdateToDate < ActiveRecord::Migration
  def change
    change_table :print_issues do |t|
      t.change :pubdate, :date

    end
  end
end
