import calculate from "./calculate";

describe('calculate bad v2', () => {
    /**
     * Depends on the actual storage, reads from file.
     */
    it('adds number from storage', () => {
        expect(calculate(3)).toBe(8)
    });
})
