$(function(){
  /* ===== Filter Jira per Dev ===== */
  $('#jiraFilter').on('change', function(){
    var dev = $(this).val();
    if (dev === 'all') {
      $('#jiraList .jira-item').show();
    } else {
      $('#jiraList .jira-item').hide();
      $('#jiraList .jira-item[data-dev="'+dev+'"]').show();
    }
  });
});