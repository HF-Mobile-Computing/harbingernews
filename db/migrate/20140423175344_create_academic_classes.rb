class CreateAcademicClasses < ActiveRecord::Migration
  def change
    create_table :academic_classes do |t|
      t.string :slug
      t.string :category
      t.string :name
      t.text :content

      t.timestamps
    end
  end
end
