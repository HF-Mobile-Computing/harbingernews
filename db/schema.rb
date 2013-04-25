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

ActiveRecord::Schema.define(:version => 20130423185138) do

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
    t.string   "content"
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

  create_table "sports", :force => true do |t|
    t.string   "slug"
    t.string   "title"
    t.text     "content"
    t.string   "season"
    t.datetime "created_at", :null => false
    t.datetime "updated_at", :null => false
    t.text     "alert"
  end

  create_table "users", :force => true do |t|
    t.string   "email",                  :default => "", :null => false
    t.string   "encrypted_password",     :default => "", :null => false
    t.string   "name"
    t.string   "reset_password_token"
    t.datetime "reset_password_sent_at"
    t.datetime "remember_created_at"
    t.integer  "sign_in_count",          :default => 0
    t.datetime "current_sign_in_at"
    t.datetime "last_sign_in_at"
    t.string   "current_sign_in_ip"
    t.string   "last_sign_in_ip"
    t.datetime "created_at",                             :null => false
    t.datetime "updated_at",                             :null => false
  end

  add_index "users", ["email"], :name => "index_users_on_email", :unique => true
  add_index "users", ["reset_password_token"], :name => "index_users_on_reset_password_token", :unique => true

end
