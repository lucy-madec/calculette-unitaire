const { calculate } = require("../calculator");

test("Addition simple", () => {
  expect(calculate("2+2")).toBe(4);
});

test("Soustraction simple", () => {
  expect(calculate("5-3")).toBe(2);
});

test("Multiplication simple", () => {
  expect(calculate("4*6")).toBe(24);
});

test("Division simple", () => {
  expect(calculate("10/2")).toBe(5);
});

test("Priorité des opérations", () => {
  expect(calculate("2+3*4")).toBe(14);
});

test("Calcul avec parenthèses", () => {
  expect(calculate("(2+3)*4")).toBe(20);
});

test("Expression invalide", () => {
  expect(() => calculate("2+bad")).toThrow("Expression invalide");
});

test("Expression vide", () => {
  expect(() => calculate("")).toThrow("Expression invalide");
});
