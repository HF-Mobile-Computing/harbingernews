FactoryGirl.define do
  factory :user do 
    name "Alex LaFroscia"
    email "test@test.com"
    password "foobar"
    password_confirmation "foorbar"
  end
end