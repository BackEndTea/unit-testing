import add from "./calculate";

describe('calculate v1', () => {
    it('adds two numbers', () => {
        expect(add(2,4)).toBe(6);
    })
});
