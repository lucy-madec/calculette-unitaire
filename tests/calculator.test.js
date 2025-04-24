const { calculate } = require('../calculator');

test('Addition simple', () => {
  expect(calculate('2+2')).toBe(4);
});
