import {writeFileSync} from 'fs';

export const storeNumberInStorage = (input: number): void => writeFileSync(__dirname + '/storage.txt', input.toString());
