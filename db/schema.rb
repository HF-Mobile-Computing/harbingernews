# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended to check this file into your version control system.

ActiveRecord::Schema.define(:version => 20130521172150) do

  create_table "announcements", :force => true do |t|
    t.string   "a_or_b"
    t.text     "content"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "buses", :force => true do |t|
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
    t.string   "date"
    t.string   "one"
    t.string   "two"
    t.string   "three"
    t.string   "four"
    t.string   "five"
    t.string   "six"
    t.string   "seven"
    t.string   "eight"
    t.string   "nine"
    t.string   "ten"
    t.string   "eleven"
    t.string   "twelve"
    t.string   "thirteen"
    t.string   "fourteen"
    t.string   "fifteen"
    t.string   "sixteen"
    t.string   "seventeen"
    t.string   "eighteen"
    t.string   "nineteen"
    t.string   "twenty"
  end

  create_table "clubs", :force => true do |t|
    t.string   "slug"
    t.string   "name"
    t.string   "category"
    t.text     "content",    :limit => 255
    t.datetime "created_at",                :null => false
    t.datetime "updated_at",                :null => false
  end

  create_table "favorites", :force => true do |t|
    t.integer  "user_id"
    t.integer  "favoritable_id"
    t.string   "favoritable_type"
    t.datetime "created_at",       :null => false
    t.datetime "updated_at",       :null => false
  end

  create_table "games", :force => true do |t|
    t.integer  "sport_id"
    t.date     "date"
    t.time     "time"
    t.string   "opponent"
    t.boolean  "is_home"
    t.string   "score"
    t.string   "status"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "memos", :force => true do |t|
    t.string   "title"
    t.string   "content"
    t.string   "bg_color"
    t.boolean  "is_image"
    t.string   "image_path"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
    t.string   "text_color"
  end

  create_table "rails_admin_histories", :force => true do |t|
    t.text     "message"
    t.string   "username"
    t.integer  "item"
    t.string   "table"
    t.integer  "month",      :limit => 2
    t.integer  "year",       :limit => 5
    t.datetime "created_at",              :null => false
    t.datetime "updated_at",              :null => false
  end

  add_index "rails_admin_histories", ["item", "table", "month", "year"], :name => "index_rails_admin_histories"

  create_table "recent_events", :force => true do |t|
    t.text     "content",    :limit => 255
    t.datetime "created_at",                :null => false
    t.datetime "updated_at",                :null => false
  end

  create_table "rich_rich_files", :force => true do |t|
    t.datetime "created_at",                                 :null => false
    t.datetime "updated_at",                                 :null => false
    t.string   "rich_file_file_name"
    t.string   "rich_file_content_type"
    t.integer  "rich_file_file_size"
    t.datetime "rich_file_updated_at"
    t.string   "owner_type"
    t.integer  "owner_id"
    t.text     "uri_cache"
    t.string   "simplified_type",        :default => "file"
  end

  create_table "sports", :force => true do |t|
    t.string   "slug"
    t.string   "title"
    t.text     "content"
    t.string   "season"
    t.datetime "created_at",          :null => false
    t.datetime "updated_at",          :null => false
    t.text     "alert"
    t.string   "banner_file_name"
    t.string   "banner_content_type"
    t.integer  "banner_file_size"
    t.datetime "banner_updated_at"
  end

  create_table "upcoming_events", :force => true do |t|
    t.string   "content"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
  end

  create_table "users", :force => true do |t|
    t.string   "email",                  :default => "",              :null => false
    t.string   "encrypted_password",     :default => "",              :null => false
    t.string   "name"
    t.string   "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.integer  "sign_in_count",          :default => 0
    t.datetime "current_sign_in_at"
    t.datetime "last_sign_in_at"
    t.string   "current_sign_in_ip"
    t.string   "last_sign_in_ip"
    t.datetime "created_at",                                          :null => false
    t.datetime "updated_at",                                          :null => false
    t.string   "avatar_file_name"
    t.string   "avatar_content_type"
    t.integer  "avatar_file_size"
    t.datetime "avatar_updated_at"
    t.integer  "roles_mask"
    t.boolean  "teacher",                :default => false
    t.text     "bio",                    :default => "Bio is empty!"
    t.integer  "age"
    t.date     "birthday"
    t.text     "interests",              :default => "Not set"
  end

  add_index "users", ["email"], :name => "index_users_on_email", :unique => true
  add_index "users", ["reset_password_token"], :name => "index_users_on_reset_password_token", :unique => true

  create_table "versions", :force => true do |t|
    t.string   "item_type",  :null => false
    t.integer  "item_id",    :null => false
    t.string   "event",      :null => false
    t.string   "whodunnit"
    t.text     "object"
    t.datetime "created_at"
  end

  add_index "versions", ["item_type", "item_id"], :name => "index_versions_on_item_type_and_item_id"

end
