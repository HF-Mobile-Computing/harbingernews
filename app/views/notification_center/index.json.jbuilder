json.array! @notifications do |notification|
  json.notification do
   json.time time_ago_in_words(notification.created_at) + " ago"
   json.content notification.content
  end
end