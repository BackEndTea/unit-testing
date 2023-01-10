import {storeNumberInStorage} from "./storage";
import {writeFileSync} from 'fs';

jest.mock('fs', () => ({
    writeFileSync: jest.fn()
}));

describe('storage v3', () => {
    beforeEach(() => {
        jest.clearAllMocks();
    });

    it('stores numbers', () => {
        storeNumberInStorage(17);

        expect(writeFileSync).toHaveBeenCalledWith(__dirname + '/storage.txt', '17')
    });
});
