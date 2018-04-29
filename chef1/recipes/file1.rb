# Run an update on the box.
execute "apt-get-update" do
  command "env > /root/file1.txt"
end
