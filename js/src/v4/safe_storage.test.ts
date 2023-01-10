import {FileNotFoundError, getNumberFromStorage, NotANumberError} from "./safe_storage";
import {readFileSync} from 'fs';

jest.mock('fs', () => ({
    readFileSync: jest.fn()
}));

describe('storage v4', () => {
    beforeEach(() => {
        jest.clearAllMocks();
    });

    it('throws if file does not exist', () => {
        (readFileSync as unknown as jest.Mock).mockImplementation(() => {
            throw new Error('file not found');
        });

        expect(getNumberFromStorage).toThrow(new FileNotFoundError('storage.txt does not exist'))
    });

    it('errors if the result is not a string', () => {
        (readFileSync as unknown as jest.Mock).mockReturnValue('abcd');

        expect(getNumberFromStorage).toThrow(new NotANumberError('Can not convert "abcd" to a number'))
    });
});
