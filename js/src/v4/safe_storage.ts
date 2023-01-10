import {readFileSync, exists} from 'fs';


export class FileNotFoundError extends Error{}

export class NotANumberError extends Error {}

export const getNumberFromStorage = (): number => {
    let fileData: string;

    try {
        fileData = readFileSync(__dirname + '/storage.txt').toString();
    } catch (e) {
        throw new FileNotFoundError('storage.txt does not exist');
    }

    const result = Number(fileData.trim());

    if(Number.isNaN(result)) {
        throw new NotANumberError('Can not convert "' + fileData + '" to a number');
    }

    return result;

}
