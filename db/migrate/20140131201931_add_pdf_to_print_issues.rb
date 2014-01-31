class AddPdfToPrintIssues < ActiveRecord::Migration
  def self.up
    add_attachment :print_issues, :pdf
    remove_column :print_issues, :link
  end

  def self.down
    remove_attachment :print_issues, :pdf
    add_column :print_issues, :link
  end
end
