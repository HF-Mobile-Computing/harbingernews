class AddAttachmentBannerToSports < ActiveRecord::Migration
  def self.up
    change_table :sports do |t|
      t.attachment :banner
    end
  end

  def self.down
    drop_attached_file :sports, :banner
  end
end
