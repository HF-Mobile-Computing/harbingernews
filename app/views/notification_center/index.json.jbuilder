json.array! @notifications do |notification|
  json.notification do
   json.time notification.created_at.time_ago_in_words
   json.content notification.content
  end
end