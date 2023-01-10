import {readFileSync} from 'fs';

export const getNumberFromStorage = (): number => {
    const res = readFileSync(__dirname + '/storage.txt');
    return Number(res.toString().trim());
}
