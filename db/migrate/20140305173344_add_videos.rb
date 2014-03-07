class AddVideos < ActiveRecord::Migration
	def change
		create_table :videos do |t|
			t.string :video_id
			t.string :video_type
			t.string :title
			t.timestamps
		end
	end
end
