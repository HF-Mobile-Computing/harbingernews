class AddLocationsToBuses < ActiveRecord::Migration
  def change
    add_column :buses, :date,         :string
    add_column :buses, :one,          :string
    add_column :buses, :two,          :string
    add_column :buses, :three,        :string
    add_column :buses, :four,         :string
    add_column :buses, :five,         :string
    add_column :buses, :six,          :string
    add_column :buses, :seven,        :string
    add_column :buses, :eight,        :string
    add_column :buses, :nine,         :string
    add_column :buses, :ten,          :string
    add_column :buses, :eleven,       :string
    add_column :buses, :twelve,       :string
    add_column :buses, :thirteen,     :string
    add_column :buses, :fourteen,     :string
    add_column :buses, :fifteen,      :string
    add_column :buses, :sixteen,      :string
    add_column :buses, :seventeen,    :string
    add_column :buses, :eighteen,     :string
    add_column :buses, :nineteen,     :string
    add_column :buses, :twenty,       :string
  end
end
