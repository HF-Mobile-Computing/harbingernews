class AddPdfToPrintIssues < ActiveRecord::Migration
  def self.up
    add_attachment :print_issues, :pdf
    remove_attachment :print_issues, :link
  end

  def self.down
    remove_attachment :print_issues, :pdf
    add_attachment :print_issues, :link
  end
end
