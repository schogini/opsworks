# Run an update on the box.
execute "create-file1" do
  command "env > /file1.txt"
end

file "/file1.txt" do
  mode '0644'
  action :touch
  #group 'www-data'
end
