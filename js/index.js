const { registerBlockStyle, registerBlockVariation } = wp.blocks;

registerBlockStyle("core/paragraph", [
  {
    name: "default",
    label: "Default",
    isDefault: true,
  },
  {
    name: "green",
    label: "Green",
  },
]);

registerBlockVariation("core/group", {
  name: "full-width-group",
  title: "Full width group",
  attributes: {
    align: "full",
  },
  isDefault: true,
});

registerBlockVariation("core/template-part", {
  name: "site-header",
  title: "Site header",
  attributes: {
    align: "full",
    tagName: "header",
    className: "site-header",
    theme: "fse-tester",
    slug: "header",
  },
});

registerBlockVariation("core/template-part", {
  name: "site-footer",
  title: "Site footer",
  attributes: {
    align: "full",
    tagName: "footer",
    className: "site-footer",
    theme: "fse-tester",
    slug: "footer",
  },
});
