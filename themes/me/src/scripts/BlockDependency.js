class BlockDependency {
  constructor() {
    this.init();
  }

  init() {
    wp.hooks.addFilter(
      'blocks.registerBlockType',
      'theme/default-group-class',
      this.addDefaultClass.bind(this)
    );
  }

  addDefaultClass(settings, name) {
    if (name !== 'core/group') return settings;

    return {
      ...settings,
      attributes: {
        ...settings.attributes,
        className: {
          type: 'string',
          default: 'max-w-[768px] mx-auto'
        }
      }
    };
  }
}

export default BlockDependency;
