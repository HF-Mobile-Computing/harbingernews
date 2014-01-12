json.array! @notifications do |notification|
  json.notification do
   json.time notification.created_at
   json.content notification.content
  end
end