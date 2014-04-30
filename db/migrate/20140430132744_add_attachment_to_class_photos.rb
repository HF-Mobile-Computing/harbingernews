class AddAttachmentToClassPhotos < ActiveRecord::Migration
  def self.up
    add_attachment :class_photos, :photo
    add_column :class_photos, :academic_class_id, :integer
  end

  def self.down
    remove_attachment :class_photos, :photo
    remove_column :class_photos, :academic_class_id
  end


end
