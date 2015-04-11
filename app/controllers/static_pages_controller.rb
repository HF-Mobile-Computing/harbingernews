class StaticPagesController < ApplicationController
  def about
  end

  def get_involved
  end

  def student_of_the_month
  end

  def graduation
  end

  def college_acceptances
  end

  def calendar
    send_file 'public/cal.png', type: 'image/png', disposition: 'inline'
  end

  def teacher_directory
    send_file 'public/teacher_directory.json', disposition: 'inline'
  end

  def morning_announcements
  end
end
