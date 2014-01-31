class AddPdfToPrintIssues < ActiveRecord::Migration
  def self.up
    add_attachment :print_issues, :pdf
  end

  def self.down
    remove_attachment :print_issues, :pdf
  end
end
