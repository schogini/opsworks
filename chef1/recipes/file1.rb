# Run an update on the box.
execute "apt-get-update" do
  command "env > /file1.txt"
end

cookbook_file "/file1.txt" do
  mode '0644'
  action :touch
  owner 'deploy'
  group 'www-data'
end