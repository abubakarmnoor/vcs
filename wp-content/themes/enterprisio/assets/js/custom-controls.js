(function(api) {

  api.sectionConstructor['enterprisio-upsell'] = api.Section.extend({
      attachEvents: function() {},
      isContextuallyActive: function() {
          return true;
      }
  });

  const enterprisio_section_lists = ['banner', 'service'];
  enterprisio_section_lists.forEach(enterprisio_homepage_scroll);

  function enterprisio_homepage_scroll(item) {
      item = item.replace(/-/g, '_');
      wp.customize.section('enterprisio_' + item + '_section', function(section) {
          section.expanded.bind(function(isExpanding) {
              wp.customize.previewer.send(item, { expanded: isExpanding });
          });
      });
  }
})(wp.customize);