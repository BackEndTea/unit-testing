import calculate from "./calculate";
import {getNumberFromStorage} from "./storage";

jest.mock('./storage.ts', () => ({
    getNumberFromStorage: jest.fn()
}));

describe('calculate good v2', () => {

    beforeEach(() => {
        jest.clearAllMocks();
    });

    /**
     * Does not depend on file system.
     */
    it('adds number from storage', () => {

        (getNumberFromStorage as unknown as jest.Mock).mockReturnValue(27)
        expect(calculate(3)).toBe(30)
    });
})
